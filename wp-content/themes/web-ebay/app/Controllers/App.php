<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public static function getUserToken() {
      $userToken = ("v^1.1#i^1#I^3#p^3#f^0#r^0#t^H4sIAAAAAAAAAOVYa2wUVRTu9gEhFQxGC5LGrIMQtJndOzu7szsju2HpI1Rou93dAtaYcnfmTjvtPNaZO20XApSGhwYRohgRJFYEQsRgiIDww8QXkviKUUmUEEMQI5HGB0IQFHBmty1tVWi7mGzi/tncc8/rO/ecc89c0DVuwkNr5629NNExPr+nC3TlOxxUMZgwrqhsUkH+tKI8MIjB0dP1QFdhd8HZ2QZU5CQXRUZSUw3k7FRk1eDSxCBh6iqnQUMyOBUqyOAwz8XCNQs4jwtwSV3DGq/JhLO6IkggICbEBCMEfD7og5TPoqr9OuNakGAYP/B7aa9A8zAhQsbaNwwTVasGhioOEh7gASTlISk27qE5CnCU30V7qUbCuRDphqSpFosLEKG0u1xaVh/k681dhYaBdGwpIULV4apYXbi6orI2Pts9SFeoLw4xDLFpDF2VawJyLoSyiW5uxkhzczGT55FhEO5QxsJQpVy435kxuJ8ONWT90AsEhvExLGDQ7QlllaYrEN/cD5siCaSYZuWQiiWculVErWgkWhGP+1a1lorqCqf9V29CWRIlpAeJyrnhRxtilVHCGYtEdK1dEpBgI6VoPxvweWna8rZFs9zBmo4kHclQFfpsZRT2RXqYsXJNFSQ7boazVsNzkeU4Gh4eMCg8FlOdWqeHRWw71c/nAXFA9YeR9jba55o5SBO3qPbRIsWKhTO9vPUh9GfFjTy4XXnBUCLF+ANCQKADbIBHQ/PCrvWx5UbIPp5wJOK2fUEJmCIVqLchnJQhj0jeCq+pIF0SONoneuiAiEiBYUXSy4oimfAJDEmJCAGEEgmeDfzPUgRjXUqYGA2kyfCNNM4gIWvNklqDcIsmEMNZ0p2nLyk6jSDRgnGSc7s7OjpcHbRL05vdHgAo9+KaBTG+BSmQGOCVbs1MSun0sLPF4udwKml502lln2VcbSZCdsyrK/pTdohLoeHUf8EW47UkimiyxKdyCxutCxGo41QMybJFyAqkYYPMFXh2rWcg2joMSwlMSi67dF28prg1aLUqm9SU9to5Eia3YQXJlSl8S7NLR1DQVDk1FuFRyEhqu1U0mp4ai8EB4VHIQJ7XTBWPxVyf6CgkRFMWJVm2+8JYDA4SH42bKpRTWOKNMZmUVDvjjFGIJGEqDVCQjKRdLyOStGjWncIjl9Xn03PGgLNZVamOBOtu4HGTqUu5UqyZQp0HFQUKTTEoI6SQmVUMkuF0TpG6+URCbG/9J+x2rY8YfziZrM6xC2YYVAzJSLSC9HsgYAHl9ZI+6KdAQvBnde4VqD3XcDM0L4ogkSBpvxeQXj+iSVbgA/bsxAOe5RkKsVlhliDOLcQUAwJeivVSvuzGCcTrKMegATXySJ0fCyBOlzXPa6gS4irwt2gdnT5lcdxsqGxlo262PqC1sUYwC/CZGd5umpwERQ5rbUiNp3Jn7sgEI1pZFa2MzWuK182vrM3qqO1LIReH4kg4FltUF81uLLZ7saKYGCZklGvNyethAyzICl5Ns5RjoKyvNZoBjJelAciutZbLkjWV/LeVV7hq+5iuU83ASBgpumGEQV+pf3ujcA99JwzlpX9Ut+Mg6Hbsz3c4gBvMoKaD+8cVNBQW3DHNkLA1vUHRZUjNKsSmjlxtKJWEkp4/zpFsgD/OGPQy2fM4mDrwNjmhgCoe9FAJSm/sFFF3TpnoAZSHYj00BSh/I5h+Y7eQKim8+5djR87dt/z71d2v5X8VOl9Sve+CEgcTB5gcjqK8wm5HHhOfs+zAtcMnjles3Ta+8JOjsaWTP31y+YcNexOXNqypDx6vnPnsFw+/vxWE5A2e2mVbvzzBfHR55vTSF3+d/MGOyPYLb2zcd4UrXrASvXTl99L16xsvG/GS/efe3v2Wdu+qJb3r3L+t3PnZmejPhbN6N79StfNd470jPxw9s+MieDp/9brFr14JLNlU8brj4t6lu+ev2HQ22n1w11StTPzjGX79PSsu15prDm0smXH11J4HT57v+njL9X1Tdm17TDx1muhpfsHxVCLl611UtNyllJav2EPMPfbyoW9b7zp69fB375xe99zm1J/fNBQf6Kn6ekvvrtKC/dfOni+rnz/remvw0I7PZ/80aQ7XVP/mlue3ncwc31/rFbljMxYAAA==");

      return $userToken;
    }

    public static function getDevId() {
      $devID = '63cff0bb-3740-47e3-9dc8-d69c0c9c61e9';
      return $devID;
    }

    public static function getAppId() {
      $appID = 'HammadSa-Accounta-PRD-72a090144-5a710bd7';
      return $appID;
    }

    public static function getCertId() {
      $certID = 'PRD-2a0901442915-d52d-480a-a169-e2f0';
      return $certID;
    }

    public static function getServerUrl() {
      $serverUrl = 'https://api.ebay.com/ws/api.dll';
      return $serverUrl;
    }

    public static function getCompatabilityLevel() {
      $compatabilityLevel = 967;    // eBay API version
      return $compatabilityLevel;
    }



}
