<?php function main_form_article() {?>

    <div id="main">
        <h1 id="lead"><span class="section">Написать новую статью?</span> </h1>
        <form id="subForm" name="subForm" method="post" action="article.php">
            <p>
                <label for="title" class="label">Название статьи</label>
                <textarea name="title" cols="35" rows="4" id="title"></textarea>
            </p>
            <p>
                <label for="section" class="label">Раздел статью </label>
                <select name="section" id="section">
                    <option value="1">PHP</option>
                    <option value="1">HTML</option>
                    <option value="2">CSS</option>
                    <option value="3">Javascript</option>
                    <option value="4">Mysql</option>
                    <option value="5">PostgreSQL</option>
                </select>
            </p>
            <p>
                <label for="preview" class="label">Краткое описание статьи </label>
                <textarea name="preview" cols="35" rows="4" id="preview"></textarea>
            </p>
            <p>
            <label for="newarticle" class="label">Статья </label>
            <textarea name="newarticle" cols="35" rows="4" id="newarticle"></textarea>
            </p>
            <p>
            <input type="submit" name="Submit" id="subscribe" value="Subscribe" />
            </p>
        </form>
    </div>
</div>
<?php } ?>

<?php function send_article() {?>

    <div id="main">
        <h1 id="lead"><span class="section">Статья загружена в базу данных</span> </h1>
    </div>
</div>
<?php } ?>

