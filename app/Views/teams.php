<article class="teams">
    <h3>Liga Budućih Šampiona 2020/2021</h3>
    <?php foreach ($teams as $team): ?>
    <p class="teams__list">
        <a href=<?="/ekipa/$team->id"?>>
            <img class="club-logo__small" src="/public/images/logos/<?=$team->id?>.png?v=0.1" alt="grb">
            <?="$team->team_name $team->team_city"?>
        </a>
    </p>
    <?php endforeach?>
</article>