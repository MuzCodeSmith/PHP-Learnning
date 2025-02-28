<?php

class Teacher {
    protected function questionPapers(){
        echo "showed exam question";
    }

    function auth(){
        $this->questionPapers();
    }
}

class Student extends Teacher {
    function stoleQuestionPapers(){
        $this->questionPapers();
    }
}

$t1 = new Teacher();
$s1 = new Student();
// $t1->auth();
$s1->stoleQuestionPapers();

?>