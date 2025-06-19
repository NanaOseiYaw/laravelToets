<!DOCTYPE html>
<html>
<head><title>Subjects</title></head>
<body>
    <h1>Subjects with Teachers</h1>
    <ul id="subjects"></ul>
    <script>
      fetch('/api/subjects')
        .then(res => res.json())
        .then(data => {
          let html = '';
          data.forEach(v => {
            html += `<li>${v.name} – given by ${v.teacher.name}</li>`;
          });
          document.getElementById('subjects').innerHTML = html;
        });
    </script>
</body>
</html>
