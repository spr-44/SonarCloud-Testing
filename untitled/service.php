<?php
// service.php

class NameService {
    public function getName($name) {
        return "You entered: " . htmlspecialchars($name);
    }
}
