<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>ADD BOOK</h1>
        
        <div class="form-container">
            <h2>Book Info</h2>
            
            <form action="process_book.php" method="POST" enctype="multipart/form-data">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="bookName">Book Name<span class="required">*</span></label>
                        <input type="text" id="bookName" name="bookName" required>
                    </div>

                    <div class="form-group">
                        <label for="category">Category<span class="required">*</span></label>
                        <select id="category" name="category" required>
                            <option value="">Select Category</option>
                            <option value="Technology">Technology</option>
                            <option value="Science">Science</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Literature">Literature</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="author">Author<span class="required">*</span></label>
                        <select id="author" name="author" required>
                            <option value="">Select Author</option>
                            <option value="Anuj kumar">Anuj Kumar</option>
                            <option value="HC Verma">HC Verma</option>
                            <option value="RD Sharma">RD Sharma</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="isbn">ISBN Number<span class="required">*</span></label>
                        <input type="text" id="isbn" name="isbn" required>
                        <small>An ISBN is an International Standard Book Number.ISBN Must be unique</small>
                    </div>

                    <div class="form-group">
                        <label for="price">Price<span class="required">*</span></label>
                        <input type="number" id="price" name="price" step="0.01" required>
                    </div>

                    <div class="form-group">
                        <label for="bookPicture">Book Picture<span class="required">*</span></label>
                        <input type="file" id="bookPicture" name="bookPicture" required>
                    </div>
                </div>

                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>