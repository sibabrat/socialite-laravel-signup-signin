<?php
Route::get('/', function () {
    return view('welcome');
});



Route::auth();
Route::get('auth/google/signin', 'SocialiteController@redirectToProviderGoogle')->name('googleSignin');
Route::get('auth/facebook/signin', 'SocialiteController@redirectToProviderFacebook')->name('facebookSignin');
Route::get('auth/twitter/signin', 'SocialiteController@redirectToProvider')->name('twitterSignin');
Route::get('auth/linkedin/signin', 'SocialiteController@redirectToProviderLinkedin')->name('linkedinSignin');
Route::get('auth/github/signin', 'SocialiteController@redirectToProviderGithub')->name('githubSignin');




Route::get('auth/google', 'SocialiteController@redirectToProviderGoogle')->name('googleSignup');
Route::get('auth/google/callback', 'SocialiteController@handleProviderCallbackGoogle');

Route::get('auth/facebook', 'SocialiteController@redirectToProviderFacebook')->name('facebookSignup');
Route::get('auth/facebook/callback', 'SocialiteController@handleProviderCallbackFacebook');

Route::get('auth/twitter', 'SocialiteController@redirectToProvider')->name('twitterSignup');
Route::get('auth/twitter/callback', 'SocialiteController@handleProviderCallback');

Route::get('auth/linkedin', 'SocialiteController@redirectToProviderLinkedin')->name('linkedinSignup');
Route::get('auth/linkedin/callback', 'SocialiteController@handleProviderCallbackLinkedin');

Route::get('auth/github', 'SocialiteController@redirectToProviderGithub')->name('githubSignup');
Route::get('auth/github/callback', 'SocialiteController@handleProviderCallbackGithub');

