<?php

class Loc
{
	/**
	* @var	string	The locale/language code to use
	*/
	public $locale_code = "en";

	/**
	* @var	array	Array of available languages in the locale system
	*/
	public $languages = array();


	function __construct()
	{
		require_once('languages.php');
		$this->languages = $locale_languages;

		if(isset($_GET['locale']))
		{
			$this->setLocale($_GET['locale']);
			setcookie('locale', $_GET['locale'], time()+60*60*24*365);
		}
		elseif(isset($_COOKIE['locale']))
		{
			$this->setLocale($_COOKIE['locale']);
		}
		else
		{
			$browser_language = $this->getLocaleFromAcceptHeader();
			$this->setLocale($browser_language);
		}
	}


	/**
	* Get all of the available languages
	*
	* @return	array
	*/
	function getLanguages()
	{
		return $this->languages;
	}


	/**
	* Check whether a locale/language code exists in the locale system
	*
	* Example: Check if "NL" (Dutch) translations exist
	*
	* @param	string	$locale_code	Two digit language code
	*
	* @return	bool
	*/
	function languageCodeExists($locale_code)
	{
		return isset($this->languages[$locale_code]);
	}


	/**
	* Set the locale/language code to use
	*/
	function setLocale($locale_code)
	{
		$this->locale_code = $locale_code;
	}


	/**
	* Get the locale language code from the "Accept-Language" HTTP header
	*
	* @return	string	The two digit locale language code
	*/
	function getLocaleFromAcceptHeader()
	{
		// Example
		// Accept-Language: da, en-gb;q=0.8, en;q=0.7
		$language_header = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

		$accepted_languages = explode(',', $language_header);

		$first_language = substr($accepted_languages[0], 0, 2);

		// Default to English on error/issue with header value parsing
		if(strlen($first_language) !== 2)
		{
			return "en";
		}

		return $first_language;
	}



	/**
	* Get the locale text translation for the provided
	* $text_id value
	*
	* Defaults to English "en" locale text if the text_id is missing
	* for the requested language code
	*
	* Example:
	* $text_id = "why_peercoin_title"
	*
	* @return	string
	*/
	function getText($text_id, $locale_code = NULL)
	{
		include("strings.php");

		// Check if custom locale was overridden
		$use_locale = $this->locale_code;

		if($locale_code !== NULL)
		{
			$use_locale = $locale_code;
		}


		// Check for missing language used and default to English if so
		if($this->languageCodeExists($use_locale) === FALSE)
		{
			$use_locale = "en";
		}


		// Check if the text_id exists for the current language
		if(isset($locale_strings[$use_locale][$text_id]))
		{
			$retrieved_text = $locale_strings[$use_locale][$text_id];
		}
		else
		{
			// Return English string on missing locale text for provided $text_id
			$retrieved_text = $locale_strings["en"][$text_id];
		}


		return $retrieved_text;
	}
}
