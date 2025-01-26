<?php
// הצגת שגיאות PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);

// פרטי חיבור למסד הנתונים
$host = 'localhost';
$username = 'root'; // שם המשתמש
$password = ''; // סיסמת MySQL
$database = 'portfolio_db'; // שם מסד הנתונים

// יצירת חיבור למסד הנתונים
$conn = new mysqli($host, $username, $password, $database);

// בדיקת חיבור למסד הנתונים
if ($conn->connect_error) {
    die("❌ Database connection failed: " . $conn->connect_error);
}

// בדיקה אם הטופס נשלח
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // קבלת הנתונים מהטופס
    $full_name = $conn->real_escape_string($_POST['full_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone_number = $conn->real_escape_string($_POST['phone_number']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $message = $conn->real_escape_string($_POST['message']);

    // שאילתת SQL להוספת הנתונים לטבלה
    $sql = "INSERT INTO contacts (full_name, email, phone_number, subject, message) 
            VALUES ('$full_name', '$email', '$phone_number', '$subject', '$message')";

    // ביצוע השאילתה ובדיקת הצלחה
    if ($conn->query($sql) === TRUE) {
        echo "✅ Your message has been saved successfully!";
    } else {
        echo "❌ Error: " . $conn->error;
    }
}

// סגירת החיבור למסד הנתונים
$conn->close();
?>
