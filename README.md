# Kirby ABT Plugin for Kirby 3

Sometimes you want to A/B test design changes. Whilst the cookbook does describe setting this up on a basic level, it is less useful if you make use of plugins like Kirby Builder. In this case, you probably want to re-arrange the page rather then simply delieviering a different style sheet or something. This page lets you server a subpage to page A as if it was page A, to 50% of the visitors.

You can install either manually or via composer.

## Installation

### Manual

To use this plugin, place all the files in `site/plugins/kirby3-abt/`.

### Composer

```
composer require hashandsalt/kirby-abt
```

## Usage

There are no options. Simply make a sub-page to page A and give it a slug of B. It will served to 50% of the visitors instead of page A.


```

## Requirements

This plugin was built using Kirby 3.0. Will not work on earlier versions.
