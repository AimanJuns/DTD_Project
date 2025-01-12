<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Books</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>MANAGE BOOKS</h1>
        
        <div class="books-container">
            <h2>Books Listing</h2>
            
            <div class="table-controls">
                <select class="records-per-page">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                </select>
                <span>records per page</span>
                
                <div class="search-box">
                    <label for="search">Search:</label>
                    <input type="text" id="search" name="search">
                </div>
            </div>

            <table class="books-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Book Name</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>ISBN</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // This is where you'll add PHP code to fetch and display books from database
                    $books = [
                        [
                            'name' => 'PHP And MySql programming',
                            'category' => 'Technology',
                            'author' => 'Anuj kumar',
                            'isbn' => '222333',
                            'price' => '20.00'
                        ],
                        // Add more sample books here
                    ];

                    foreach($books as $index => $book) {
                        echo "<tr>";
                        echo "<td>" . ($index + 1) . "</td>";
                        echo "<td>" . $book['name'] . "</td>";
                        echo "<td>" . $book['category'] . "</td>";
                        echo "<td>" . $book['author'] . "</td>";
                        echo "<td>" . $book['isbn'] . "</td>";
                        echo "<td>" . $book['price'] . "</td>";
                        echo "<td class='actions'>
                                <button class='edit-btn'>Edit</button>
                                <button class='delete-btn'>Delete</button>
                              </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>