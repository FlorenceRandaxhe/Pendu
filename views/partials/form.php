<form action="index.php" method="post">
    <fieldset>
        <legend>
            Il te reste X essais pour sauver ta peau
        </legend>

        <div>
            <label for="triedLetter">Choisis ta lettre</label>
            <select name="triedLetter" id="triedLetter">
                <!-- répéter 26 fois -->
                <?php foreach ($lettersArray as $letter => $status): ?>
                    <?php if ($status) : ?>
                        <option value="<?= $letter ?>"><?= $letter ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
            <input type="hidden" name="lettersArray" value="<?= $serializedLettersArray; ?>">
            <input type="submit" value="Essayer la lettre">
        </div>
    </fieldset>
</form>