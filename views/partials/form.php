<form action="index.php" method="post">
    <fieldset>
        <legend>
            Il te reste <?= $remainingTrials ?> essais pour sauver ta peau
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
            <input type="hidden" name="wordIndex" value="<?= $wordIndex; ?>">
            <input type="hidden" name="lettersCount" value="<?= $lettersCount; ?>">
            <input type="hidden" name="replacementString" value="<?= $replacementString; ?>">
            <input type="hidden" name="triedLetters" value="<?= $triedLetters; ?>">
            <input type="hidden" name="trials" value="<?= $trials; ?>">
            <input type="submit" value="Essayer la lettre">
        </div>
    </fieldset>
</form>