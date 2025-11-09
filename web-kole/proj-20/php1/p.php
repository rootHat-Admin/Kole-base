

if (!empty($searchQuery)) {
    
    $sql = "SELECT * FROM books WHERE author LIKE ? OR title LIKE ? OR year LIKE ?";
    $stmt = $conn->prepare($sql);  
    $searchTerm = "%" . $searchQuery . "%"; 
    $stmt->bind_param("sss", $searchTerm, $searchTerm, $searchTerm); 

    $stmt->execute();  
    $result = $stmt->get_result();  

    // Если есть результаты
    if ($result->num_rows > 0) {
       
        while ($row = $result->fetch_assoc()) {
            
            echo "<div>";
            echo "<strong>Автор:</strong> " . htmlspecialchars($row['author']) . "<br>";
            echo "<strong>Название книги:</strong> " . htmlspecialchars($row['title']) . "<br>";
            echo "<strong>Год издания:</strong> " . htmlspecialchars($row['year']) . "<br>";
            echo "</div><hr>";
        }
    } else {

        echo "Результаты не найдены.";
    }
} else {
    
    echo "Пожалуйста, введите запрос для поиска.";
}

$conn->close(); 
?>


?>