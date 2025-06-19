<!DOCTYPE html>
<html>
<head><title>Teachers</title></head>
<body>
    <h1>Teachers with their subjects</h1>
    <ul id="teachers"></ul>
    <script>
      fetch('/api/teachers')
        .then(res => res.json())
        .then(data => {
          let html = '';
          data.forEach(d => {
            const subjects = d.subjects.map(v => v.name).join(', ');
            html += `<li>${d.name}: ${subjects}</li>`;
          });
          document.getElementById('teachers').innerHTML = html;
        });
    </script>
</body>
</html>
