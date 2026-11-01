<?php

class Student
{
    public int $id;
    public string $name;
    public string $batch;
    public function __construct(int $id, string $name, string $batch)
    {
        $this->id = $id;
        $this->name = $name;
        $this->batch = $batch;
    }
    public function result(int $id,)
    {
        $ff = "results.txt";
        $lines = file($ff, FILE_IGNORE_NEW_LINES);

        //echo "<pre>";
        // print_r($lines);
        $found = false;

        foreach ($lines as $line) {
            list($sid, $batch, $name, $res) = explode(",", $line);
            if ((int) $sid == $id) {
                echo "ID=" . $sid . " Name=" . $name . " Batch =" . $batch . " Result =" . $res . "<br>";
                $found = true;
                return;
            }
        }
        if (!$found) {
            echo "no student found";
        }

    }
}

$student = new Student(100, 'sumon', 'pwad73');

$student->result(103);
$student->result(101);


