<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files: true
  sortable: true
  fields:
    alt:
      label: Alt Text
      type: textarea
    location:
      label: Location
      type: text
    year:
      label: Year
      type: text
    gridlayout:
      label: Layout
      type: radio
      options:
        6x6: 6x6
        6x7: 6x7
        7x6: 7x6
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  type:
    label: Project Type
    type: tags
