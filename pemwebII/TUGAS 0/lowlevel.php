<?php
$error = '';
$predikat = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $raw = isset($_POST['nilai']) ? trim((string)$_POST['nilai']) : '';

    if ($raw === '') {
        $error = 'Nilai wajib diisi.';
    } elseif (!is_numeric($raw)) {
        $error = 'Input harus angka.';
    } else {
        $nFloat = (float)$raw;
        if (floor($nFloat) != $nFloat) {
            $error = 'Gunakan bilangan bulat';
        } else {
            $n = (int)$nFloat;
            if ($n < 0 || $n > 100) {
                $error = 'Nilai harus antara 0 sampai 100.';
            } else {
                if ($n >= 80) {
                    $predikat = 'A';
                } elseif ($n >= 70) {
                    $predikat = 'B';
                } elseif ($n >= 60) {
                    $predikat = 'C';
                } elseif ($n >= 50) {
                    $predikat = 'D';
                } else {
                    $predikat = 'E';
                }
            }
        }
    }
}

?>
<form method="post" action="">
    <input type="number" name="nilai" min="0" max="100" step="1" required>
    <button type="submit">Konversi</button>
</form>
<?php if ($error !== ''): ?>
    <div><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></div>
<?php elseif ($predikat !== ''): ?>
    <div>Predikat: <?php echo htmlspecialchars($predikat, ENT_QUOTES, 'UTF-8'); ?></div>
<?php endif; ?>

