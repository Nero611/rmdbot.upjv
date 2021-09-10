<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SimpleScheduleViewer</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Voir EDT</a></li>
                <li><a href="schedule.json">API</a></li>
                <li><a href="updater.php">Mettre à jour l'EDT</a></li>
            </ul>
        </nav>
        <!-- header, titre, nav {viewer, api, creator (avec connexion)} -->
    </header>
    <main>
        <!-- edt visible simplement et de façon responsive -->
        <style>
            td {
                border: 1px solid black;
            }
        </style>
        <table>
            <tr>
                <td>X</td>
                <td>Lundi</td>
                <td>Mardi</td>
                <td>Mercredi</td>
                <td>Jeudi</td>
                <td>Vendredi</td>
                <td>Samedi</td>
            </tr>
            <tr>
                <td>8h</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            <tr>
                <td>8h30</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            <tr>
                <td>9h</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            <tr>
                <td>9h30</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            <tr>
                <td>10h</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            <tr>
                <td>10h30</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            <tr>
                <td>11h</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            <tr>
                <td>11h30</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            <tr>
                <td>12h</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            <tr>
                <td>12h30</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            <tr>
                <td>13h</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            <tr>
                <td>13h30</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            <tr>
                <td>14h</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            <tr>
                <td>14h30</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            <tr>
                <td>15h</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            <tr>
                <td>15h30</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            
            <tr>
                <td>16h</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            <tr>
                <td>16h30</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            <tr>
                <td>17h</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            <tr>
                <td>17h30</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            <tr>
                <td>18h</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            <tr>
                <td>18h30</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            <tr>
                <td>19h</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            <tr>
                <td>19h30</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            <tr>
                <td>20h</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            <tr>
                <td>20h30</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
            <tr>
                <td>21h</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
                <td>xxxx</td>
            </tr>
        </table>
        <p id="machine">test</p>
        <script src="js/parser.js"></script>
    </main>
</body>
</html>