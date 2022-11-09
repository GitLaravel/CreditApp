<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Демо Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

    <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                <h1 class="m-0 text-center">Форма расчета кредита</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container">
            <!-- Small boxes (Stat box) -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <form action="{{ route('CreditResult.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="surname" class="form-control" placeholder="Фамилия">
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <input type="text" name="patronymic" class="form-control" placeholder="Отчество">
                    </div>
                    <div class="form-group">
                        <input type="date" name="birthday" class="form-control" placeholder="ДД.ММ.ГГГГ">
                    </div>
                    <span>Трудоустройство</span>
                       <div class="form-check">
                        <input class="form-check-input" type="radio" name="employment" id="flexRadioDefault1" value="official" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                          Официальное
                        </label>
                    </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="employment" id="flexRadioDefault2" value="NOofficial" >
                        <label class="form-check-label" for="flexRadioDefault2">
                            Неофициальное
                        </label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="loan_amount" class="form-control" placeholder="Сумма займа">
                    </div>

                    <div class="form-group">
                        <input type="text" name="loan_term" class="form-control" placeholder="Срок займа в годах">
                    </div>


                    <span>Гражданство</span>
                       <div class="form-check">
                        <input class="form-check-input" type="radio" name="nationality" id="flexRadioDefault1" value="Russian" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                          РФ
                        </label>
                    </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="nationality" id="flexRadioDefault2" value="NoRussian" >
                        <label class="form-check-label" for="flexRadioDefault2">
                            Другое
                        </label>
                    </div>


                    <div class="form-group">
                        <input type="tel" name="tel" class="form-control" placeholder="+7 (900) 123-45-67">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name ="approval" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Согласие на обработку
                        </label>
                      </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>
                </form>
            </div>
            <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
    <!-- /.content -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
