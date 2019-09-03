<?php


class ProjectPage extends Page {

    public function tagslugs() {

        $list = [];

        foreach ($this->tags()->split(',') as $tagname) {
            $list[] = Str::kebab($tagname);
        }

        return implode(",",$list);

    }

    public function imageArray() {

        $images = [];

        foreach ($this->gallery()->toFiles() as $pic) {

            $images[] = $pic->imagedata();

        }

        return $images;

    }
}
