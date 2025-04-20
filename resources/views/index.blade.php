@extends('app')

@section('content')
  <section class="banner">
    <div class="container banner__container">
      <h1>УПС — Универсальный Помощник Студенту</h1>
      <p>Легко, весело и с пользой преодолевай учебные трудности вместе с нами!</p>
      {{-- <a href="#find-tutor" class="btn">Начать</a> --}}
    </div>
  </section>

  <section id="jokes" class="section jokes">
    <div class="container jokes__container">
     <div class="block-joke" data-aos="fade-up">
      <span>
        Стук в кабинет врача. Он открывает:<br>
        — Здравствуйте! Вы пришли пожаловаться на проблемы со зрением?<br>
        — Да, но как Вы узнали?<br>
        — Это окно.<br>
      </span>
     </div>
      <div class="section-content">
        <h2>Немного юмора</h2>
        <p>Хочешь отвлечься от учёбы? Держи немного шуток</p>
        <a href="#" class="btn">Давай ещё одну шутку!</a>
      </div>
    </div>
  </section>

  <section id="find-tutor" class="section find-tutor">
    <div class="container find-tutor__container">
      <div class="section-content">
        <h2>Поиск репетитора</h2>
        <p>Подбери репетитора по нужному предмету и начни получать знания уже сегодня.</p>
        <a href="#" class="btn">Найти репетитора</a>
      </div>

      <object data-aos="fade-left" class="tutor-image" type="image/svg+xml" data="{{ asset('images/tutor.svg') }}"></object>
    </div>
  </section>

  <section id="become-tutor" class="section become-tutor">
    <div class="container become-tutor__container">
      <div class="section-content">
        <h2>Стань репетитором</h2>
        <p>Хочешь делиться знаниями, помогать другим и зарабатывать? Присоединяйся к нашей команде!</p>
        <a href="#" class="btn">Стать репетитором</a>
      </div>
      <img data-aos="zoom-in" data-aos-offset="500" src="{{ asset('images/become_tutor.png') }}" alt="Стать репетитором">
    </div>
  </section>

  <section id="resources" class="section resources">
    <div class="container resources__container">
      <div class="section-content">
        <h2>Информационные ресурсы</h2>
        <p>Лучшие материалы, курсы и платформы для самообразования — всё собрано в одном месте.</p>
        <a href="#">Перейти к списку инф. ресурсов</a>
      </div>
    </div>
  </section>

  <section id="telegram" class="section telegram">
    <div class="container telegram__container">
      <img src="{{ asset('images/telegram.jpg') }}" alt="Телеграм Бот">
      <div class="section-content">
        <h2>Мы в Телеграм</h2>
        <p>Запусти нашего бота и получай доступ ко всем функциям УПС прямо в мессенджере.</p>
        <a href="https://t.me/your_bot_link" class="btn">Перейти к боту</a>
      </div>
    </div>
  </section>
@endsection
