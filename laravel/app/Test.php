<?php

namespace App;

use App\Models\Tests\Question;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $guarded = [];
    
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot(['score','answers'])->withTimestamps();
    }

    public function getScoreAttribute()
    {
        $score = 0;
        $total = 0;
        foreach ($this->users()->wherePivot('score','>',0)->get() as $us){
            $score += $us->pivot->score;
            $total++;
        }
        if($total > 0) return round(100*($score/$total)/$this->questions()->count());
        return 0;
    }
}
