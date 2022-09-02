<form action="#" class="form" method="POST">
    <div class="form__inputField">
        <label for="childName">child Name : </label>
        <input type="text" name="childName" value="<?=isset($_POST['childName'])?$childName:"" ?>" placeholder="child name"/>
    </div>
    <div class="form__inputField">
        <label for="gender">Gender : </label>
            <div>
            Boy <input type="radio" name="gender" value="boy">
            Girl <input type="radio" name="gender" value="girl">
            </div>
            
    </div>
    <div class="form__inputField">
        <label for="teacherName">Teacher Name</label>
        <input type="text" placeholder="Teacher name"/>
    </div>
    <div class="form__inputField">
        <label for="reasonCAtegory">Reason Catégory</label>
        <select name="reasonCategory">
            <option value="raison1">Raison 1</option>
            <option value="raison2">Raison 2</option>
            <option value="raison3">Raison 3</option>
        </select>
    </div>
    <button type="submit">Generate</button>
</form>