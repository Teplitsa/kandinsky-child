# Дочерняя тема кандинского

На ее основе можно создавать свою тему для Кандинского.

**Внимание!!!** В дочерних темах кандинского нельзя создавать функции, классы и глобальные переменные с префиксами ```KND_``` и ```knd_```, желательно использовать префик ```knd_child_```.

### Как изменить логотип на странице входа в WordPress.

```
/**
 * Change the logo on the WordPress login page.
 */
function knd_child_custom_login_logo() { ?>
	<style>
		.login h1 a {
			background-image: url(http://knd.te-st.ru/demo/knd-logo.svg);
			background-position: center;
			background-size: contain;
			height:65px;
			width: calc(100% - 50px);
		}
	</style>
<?php }
add_action( 'login_head', 'knd_child_custom_login_logo' );
```

## Хуки темы

### Как через дочернюю тему поменять ссылку логотипа на любую другую.

```
/**
 * Redefine home url site for logo.
 */
function knd_child_get_home_url(){
	return 'https://yoursite.com';
}
add_filter( 'knd_get_home_url', 'knd_child_get_home_url' );
```