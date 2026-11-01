<?php 

class student {
    public $id;
    public $name;
    public $batch;

    // Constructor to initialize data and print a result
    public function __construct($id, $name, $batch) {
        $this->id = $id;
        $this->name = $name;
        $this->batch = $batch;

        echo "<div style='font-family: Arial; margin-bottom: 15px; padding: 10px; border: 1px solid #ccc; width: 300px;'>";
        echo "<strong>Student Info:</strong><br>";
        echo "ID: " . htmlspecialchars($this->id) . "<br>";
        echo "Name: " . htmlspecialchars($this->name) . "<br>";
        echo "Batch: " . htmlspecialchars($this->batch) . "<br>";
        
        // Call the result method inside the constructor as requested
        $this->result($this->id);
        
        echo "</div>";
    }

    // Method that takes id as parameter, searches the file, and prints the result
    public function result($searchId) {
        $filename = "results.txt";

        // Create a dummy 'results.txt' file automatically if it doesn't exist for testing purposes
        if (!file_exists($filename)) {
            $sampleData = "101,A+\n102,B+\n103,A\n104,B\n105,A-";
            file_put_contents($filename, $sampleData);
        }

        $foundResult = "Result not found";
        
        // Open and read the file
        if (($handle = fopen($filename, "r")) !== FALSE) {
            while (($line = fgets($handle)) !== FALSE) {
                // Assuming CSV format in file: ID, Result
                $data = explode(",", trim($line));
                if (count($data) >= 2 && trim($data[0]) === $searchId) {
                    $foundResult = trim($data[1]);
                    break;
                }
            }
            fclose($handle);
        }

        echo "Result: <strong>" . htmlspecialchars($foundResult) . "</strong><br>";
    }
}

// --- Example Usage ---
// Creating student objects will automatically initialize properties and print their results fetched from 'results.txt'
$student1 = new student("101", "Alice Smith", "Batch 2024");
$student2 = new student("103", "Bob Jones", "Batch 2024");
$student3 = new student("105", "Charlie Brown", "Batch 2023");

?>