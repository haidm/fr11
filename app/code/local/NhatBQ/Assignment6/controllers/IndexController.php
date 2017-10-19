<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/17/2017
 * Time: 10:43 AM
 */

class NhatBQ_Assignment6_IndexController extends Mage_Core_Controller_Front_Action {

    public function createNewStudentAction() {
        $blogpost = Mage::getModel('assignment6/student');
        $blogpost->setTitle('Student');
        $blogpost->setPost('This student was created from code!');
        $blogpost->setCreatedAt(now());
        $blogpost->save();
        echo 'Student with ID ' . $blogpost->getId() . ' created.';
        $this->showAllBlogPostsAction();
    }

    public function readStudentAction() {
        $params = $this->getRequest()->getParams();
        $student = Mage::getModel('assignment6/student');
        echo("Loading the student with an ID of ".$params['id']);
        $student->load($params['id']);
        $data = $student->getData();
        var_dump($data);
        $this->showAllStudentsAction();
    }

    public function updateStudentAction() {
        $student = Mage::getModel('assignment6/student')->getCollection();
        foreach($student as $post)
        {
            if($post->getId()%2==0)
            {
                $post->setPost("This is updated by updateStudenttAction");
                $post->setUpdatedAt(now());
                $post->save();
            }
        }
        echo 'Studnet with even number id has been updated.';
        $this->showAllStudentsAction();
    }

    public function deleteStudentAction() {
        $params = $this->getRequest()->getParams();
        $blogpost = Mage::getModel('assignment6/student');
        $blogpost->load($params['id']);
        echo("Deleting the student with an ID of ".$params['id']."<br/>");
        $blogpost->delete();
        echo("The student with an ID of ".$params['id']." has been deleted"."<br/>");

        $this->showAllStudentsAction();
    }

    public function showAllBlogPostsAction() {
        $posts = Mage::getModel('weblog/blogpost')->getCollection();
        echo "<table border='1'><tr><th>Post ID</th><th>Post Title</th><th>Content</th><th>Updated At</th><th>Created At</th></tr>";
        foreach($posts as $blogpost){
            echo "<tr><td>".$blogpost->getId()."</td>";
            echo "<td>".$blogpost->getTitle()."</td>";
            echo "<td>".$blogpost->getPost()."</td>";
            echo "<td>".$blogpost->getUpdatedAt()."</td>";
            echo "<td>".$blogpost->getCreatedAt()."</td>";
            echo "</tr>";
        }
        echo "</table>";

        $this->loadLayout('nhatbq_assignment5_handle');
        $this->renderLayout();
    }
}