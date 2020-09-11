<?php


namespace App\Model;

use App\Model\DB;

class Model extends DB
{
    public $tableName;

    protected function getKey(array $fields)
    {
        $string = '';
        foreach (array_keys($fields) as $value) {
            $string .= '`' . $value . '`' . ',';
        }
        $string = rtrim($string, ',');
        return $string;
    }
    protected function getValue(array $fields)
    {
        $string = '';
        foreach (array_values($fields) as $value) {
            $string .= '\'' . $value . '\'' . ',';
        }
        $string = rtrim($string, ',');
        return $string;
    }

    public function create(array $fields)
    {
        $keys = $this->getKey($fields); // values strings
        $values = $this->getValue($fields);
        $query = "INSERT INTO $this->tableName ($keys) VALUES ($values);";
        if ($this->connect->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $this->connect->error;
        }

        $this->connect->close();

    }
}