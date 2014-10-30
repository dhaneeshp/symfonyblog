<?php



namespace Treewalker\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Treewalker\Bundle\PaginationBundle\Entity\Paginator;
use Treewalker\Bundle\UserBundle\Entity\Users;
use Treewalker\Bundle\UserBundle\Form\UsersType;
use Treewalker\Bundle\UserBundle\Entity\ChangePassword;
use Treewalker\Bundle\UserBundle\Form\ChangePasswordType;

class UsersAdminController extends Controller {
    
    
    /**
     * The index action
     *
     * @Route("/", name="treewalker_admin_users_homepage")
     */    
    public function listUsersAction(Request $request){
        
        $em = $this->getDoctrine()->getManager();
        
        $users = $em->createQueryBuilder()
                    ->select('b')
                    ->from('TreewalkerUserBundle:Users',  'b')
                    ->getQuery();
       
        $paginator = new Paginator();
        $page = $this->get('request')->query->get('page',1);
        
        $pagination = $paginator->paginate($users,$page,2);
        
        return $this->render('TreewalkerUserBundle:Account:manage_users.html.twig', array(
               'websitetitle'=> 'Treewalker Blog','paginator'=>$paginator,'pagination' => $pagination));
       
        
    }
    
    
    /**
     * The add Action
     * @Route("/add",  name="treewalker_admin_user_add")
     * @Method({"GET","POST"}) 
     * @return array
     */
    
    public function addUserAction(Request $request){
        
        $users = new Users();
        $usersType = new UsersType();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm($usersType,$users)->add('submit','submit');        
        $form->handleRequest($request);        
        if($form->isValid()){
            $data = $form->getData();
            $factory = $this->get('security.encoder_factory');
            $encoder = $factory->getEncoder($users);
            
            $password = $encoder->encodePassword($data->getPassword(),$users->getSalt());
            
            $data->setPassword($password);
            
            $em->persist($data);
            $em->flush();

            return $this->redirect($this->generateUrl('treewalker_admin_users_homepage'));
        }
        
        return $this->render('TreewalkerUserBundle:Account:admin_add_user.html.twig',array('form'=>$form->createView()));
        
    }
    
    /**
     * The edit Action
     * @param int id
     * @Route("/edit/{id}", requirements={"id" = "\d+"}, name="treewalker_admin_user_edit")
     * @Method({"GET","POST"}) 
     * @return array
     */
    
    public function editAction($id, Request $request){
        $manager  = $this->getDoctrine()->getManager();
        
        $user = $manager->getRepository('TreewalkerUserBundle:Users')->find($id);
        
        $form = $this->createForm(new UsersType(),$user)->remove('password')->add('submit','submit');
        
        $form->handleRequest($request);
        
        if($form->isValid()){
            $manager->flush();
        }
        
        return $this->render('TreewalkerUserBundle:Account:edit_user.html.twig',array('form'=>$form->createView(),'user' => $user));
    }
    
    /**
     * The delete action
     * 
     * @param int id
     * 
     * @Route("/delete/{id}", requirements={"id"="\d+"}, name="treewalker_admin_user_delete")
     * 
     * @Method({"GET","POST"})
     * 
     * @return array
     */
    public function deleteAction($id,Request $req){
        $em = $this->getDoctrine()->getManager();
        $blog = $em->getRepository("TreewalkerUserBundle:Users")->find($id);
        
        $em->remove($blog);
        $em->flush();
        
        return $this->redirect($this->generateUrl('treewalker_admin_users_homepage'));
    }
    
    
    /**
     * Change Password action
     * 
     * @param int id
     * 
     * @Route("/change_password/{id}",requirements={"id"="\d+"}, name="treewalker_admin_user_changepassword")
     * 
     * @Method({"GET","POST"})
     * 
     * @return array
     */
     public function changePasswordAction($id,Request $request){
         
         $em = $this->getDoctrine()->getManager();
         
         $user = $em->getRepository("TreewalkerUserBundle:Users")->find($id);
         
         $changePassword = new ChangePassword();
         $changePasswordType = new ChangePasswordType();
         $form = $this->createForm($changePasswordType,$changePassword)
                 ->remove('oldPassword')
                 ->add('submit','submit');
         
         $form->handleRequest($request);
         
         if($form->isValid()){
             
             $data = $form->getData();
             $users = new Users();
             $factory = $this->get('security.encoder_factory');
             $encoder = $factory->getEncoder($users);
            //$oldPassword = $data->getOldPassword();
            //$oldPasswordEncoded = $encoder->encodePassword($oldPassword,$user->getSalt());             
            // if($user->getPassword() == $oldPasswordEncoded){
                $newPasswordEncoded = $encoder->encodePassword($data->getNewPassword(),$user->getSalt());             
                $user->setPassword($newPasswordEncoded);

                $em->flush();
                return $this->redirect($this->generateUrl('treewalker_admin_user_edit', array('id'=> $id)));
                        
             //}
             
             
         }
         
         return $this->render("TreewalkerUserBundle:Security:change_password.html.twig",
                                    array('form'=>$form->createView(), 'user' => $user));
         
     }
    
}
