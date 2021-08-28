<article>
  <h1><?= $profile->name; ?></h1>

  <p>
    seu sobrenome é <?= $profile->lastname; ?>
    <a title="enviar E-mail" href="mailto:<?= $profile->email; ?>">Enviar E-mail</a>
  </p>
</article>