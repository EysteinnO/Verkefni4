<div class="container">
    <h1>Books</h1>    
    <!-- add song form -->
    <div class="box">
        <h3>Add a book</h3>
        <form action="<?php echo URL; ?>songs/addsong" method="POST">
            <label>Author</label>
            <input type="text" name="Author" value="" required />
            <label>Name</label>
            <input type="text" name="Name" value="" required />
            <label>Publisher</label>
            <input type="text" name="Publisher" value="" />
            <label>Year</label>
            <input type="text" name="Year" value="" />
            <input type="submit" name="submit_add_song" value="Submit" />
        </form>
    </div>
    <!-- main content output -->
    <div class="box">
        <h3>Amount of books: <?php echo $amount_of_songs; ?></h3>        
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>BookID</td>
                <td>Book name</td>
                <td>Author</td>
                <td>Publisher</td>
                <td>Year</td>
                <td>DELETE</td>
                <td>EDIT</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($books as $book) { ?>
                <tr>
                    <td><?php if (isset($book->BookID)) echo htmlspecialchars($book->BookID, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($book->Book)) echo htmlspecialchars($book->Book, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($book->Author)) echo htmlspecialchars($book->Author, ENT_QUOTES, 'UTF-8'); ?></td>                    
                    <td><?php if (isset($book->Publisher)) echo htmlspecialchars($book->Publisher, ENT_QUOTES, 'UTF-8'); ?></td>
                    </td>
                    <td><?php if (isset($book->Year)) echo htmlspecialchars($book->Year, ENT_QUOTES, 'UTF-8'); ?></td>
                    </td>

                    <td><a href="<?php echo URL . 'songs/deletesong/' . htmlspecialchars($book->BookID, ENT_QUOTES, 'UTF-8'); ?>">delete</a></td>
                    <td><a href="<?php echo URL . 'songs/editsong/' . htmlspecialchars($book->BookID, ENT_QUOTES, 'UTF-8'); ?>">edit</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
