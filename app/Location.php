<?php

namespace App;

class Location
{
    public $id;
    public $parent_id;

    public function __construct($id)
    {
        if ($loc = Locations::find($id)) {
            $this->id = $loc->id;
            $this->parent_id = $loc->parent;
        }
    }

    // Get array of child Locations
    public function getChild($level = null)
    {
        if (isset($level) && $level < 1)
            return;

        $level = $level != null ? $level- 1 : null;
        $child = [];
        $locs = Locations::select('id', 'name')->where('parent', '=', $this->id)->get();
        foreach ($locs as $loc) {
            $child[$loc->name] = new Location($loc->id);
            $child[$loc->name]->child = $child[$loc->name]->getChild($level);
        }
        return $child;

    }

    // Get array of parent Locations
    public function getParent($level = null)
    {
        if (isset($level) && $level < 1)
            return;

        $level = $level != null ? $level-1 : null;
        $parent = [];
        $locs = Locations::select('id', 'name')->where('id', '=', $this->parent_id)->get();
        foreach ($locs as $loc) {
            $parent[$loc->name] = new Location($loc->id);
            $parent[$loc->name]->parent = $parent[$loc->name]->getParent($level);
        }
        return $parent;
    }
}