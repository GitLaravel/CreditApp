<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Демо Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <?php if($age >= 25 and $age <= 45 and
                    $data['nationality'] == 'Russian' and
                    $data['employment'] == 'official' and
                    $data['loan_amount'] >= 300000 and $data['loan_amount'] <= 1000000 and
                    $data['loan_term'] >= 5 and $data['loan_term'] <= 8): ?>
                <p>Альфа банк</p>
                <p>9% ставка в год </p>
                <p>ежемесячные выплаты:<?php echo e($payments); ?></p>
                <p>сумма переплаты:<?php echo e($pereplata); ?></p>
            <?php elseif($age >= 20 and $age <= 45 and
                        $data['nationality'] == 'Russian' and
                        $data['loan_amount'] >= 100000 and $data['loan_amount'] <= 600000 and
                        $data['loan_term'] >= 0.5 and $data['loan_term'] <= 3): ?>
                <p>Тинькофф банк</p>
                <p>5% ставка в год </p>
                <p>ежемесячные выплаты:<?php echo e($payments); ?></p>
                <p>сумма переплаты: <?php echo e($pereplata); ?></p>
            <?php elseif($age >= 18 and $age <= 65 and
                        $data['nationality'] == 'Russian' and
                        $data['employment'] == 'official' and
                        $data['loan_amount'] >= 300000 and $data['loan_amount'] <= 1000000 and
                        $data['loan_term'] >= 3 and $data['loan_term'] <= 5): ?>
                <p>Сбербанк</p>
                <p>8.2% ставка в год</p>
                <p>ежемесячные выплаты:<?php echo e($payments); ?></p>
                <p>сумма переплаты: <?php echo e($pereplata); ?></p>
            <?php elseif($age >= 30 and $age <= 50 and
                        $data['nationality'] == 'Russian' and
                        $data['employment'] == 'official' and
                        $data['loan_amount'] >= 800000 and $data['loan_amount'] <= 1500000 and
                        $data['loan_term'] >= 5 and $data['loan_term'] <= 10): ?>
                <p>Кредит Европа банк</p>
                <p>11% ставка в год</p>
                <p>ежемесячные выплаты:<?php echo e($payments); ?></p>
                <p>сумма переплаты: <?php echo e($pereplata); ?></p>
            <?php else: ?>
                Нет предложений по данным условиям
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
<?php /**PATH D:\dist\OpenServer\domains\TestBack\test_back\resources\views/CreditResult/show.blade.php ENDPATH**/ ?>