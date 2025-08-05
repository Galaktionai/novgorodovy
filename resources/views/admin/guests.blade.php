<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список гостей</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { padding: 8px 12px; border: 1px solid #ddd; text-align: left; }
    </style>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="admin__header">
      <div class="container">
        <h1>Список гостей</h1>
      </div>
    </div>

    <div class="admin__filter">
      <div class="container">
        <a href="{{ route('admin.guests') }}" style="{{ $filter === null ? 'font-weight:bold; background: #688dbc; color: #fff;' : '' }}">Все</a>
        <a href="{{ route('admin.guests', ['filter' => 'coming']) }}" style="{{ $filter === 'coming' ? 'font-weight:bold; background: #688dbc; color: #fff;' : '' }}">Только кто придёт</a>
        <a href="{{ route('admin.guests', ['filter' => 'no-coming']) }}" style="{{ $filter === 'no-coming' ? 'font-weight:bold; background: #688dbc; color: #fff;' : '' }}">Только кто не придёт</a>
      </div>
    </div>
    <div class="container">
      <table class="admin__table">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>№</th>
                  <th>Имя</th>
                  <th>Придёт?</th>
                  <th>Дата отправки</th>
                  <th>Удалить</th>
              </tr>
          </thead>
          <tbody>
              @forelse ($guests as $guest)
                  <tr class="{{$guest->come === 1 ? 'active' : 'no_active' }}">
                      <td>{{ $guest->id }}</td>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $guest->name }}</td>
                      <td>{{ $guest->come ? 'Да' : 'Нет' }}</td>
                      <td>{{ $guest->created_at->format('d.m.Y H:i') }}</td>
                      <td>
                            <form action="{{ route('guests.destroy', $guest->id) }}" method="POST" onsubmit="return confirm('Удалить этого гостя?')">
                                @csrf
                                @method('DELETE')
                                <button class="admin__delete__come">Удалить</button>
                            </form>
                        </td>
                  </tr>
              @empty
                  <tr>
                      <td colspan="4">Гостей пока нет</td>
                  </tr>
              @endforelse
          </tbody>
      </table>
    </div>

</body>
</html>
