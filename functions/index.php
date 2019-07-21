<?php

// A/B Testing
// ======================================================================

function visitorgroup($which = null) {
  $visitor = kirby()->visitor();
  $ip      = $visitor->ip();
  $int     = ip2long($ip);
  $group   = ($int % 2) ? 'a' : 'b';

  if (is_null($which) === true) {
    return $group;
  }

  return $group == $which;
}
