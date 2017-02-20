<?php

namespace App\Observers;


use App\Rule;

class RuleObserver
{
    /**
     * Listen to the Rule deleting event.
     *
     * @param  Rule  $user
     * @return void
     */
    public function deleting(Rule $rule)
    {
        $rule->resources()->delete();
        $rule->answers()->delete();
        $rule->expressions()->delete();
    }
}