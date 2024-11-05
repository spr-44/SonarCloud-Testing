<?php
// component.php
require 'service.php';

class NameComponent {
    private $nameService;

    public function __construct() {
        $this->nameService = new NameService();
    }

    public function askForName() {
        echo '<form method="POST" action="">
                Enter your name: <input type="text" name="name">
                <button type="submit">Submit</button>
              </form>';

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['name'])) {
            $name = $_POST['name'];
            $response = $this->nameService->getName($name);
            echo "<p>$response</p>";
        }
    }
}

// Create an instance of the component and call the method to ask for a name
$component = new NameComponent();
$component->askForName();
