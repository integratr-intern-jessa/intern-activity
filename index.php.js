<?php


let $course1 = [
    'BSIT',
    'BSBA',
    'HMO',
    'NC2',
    'ENGINEERING',
    'NURSE',
    'ARCHITECT',
    'TOURISM',
];

let $course2 = [
    'HMO',
    'ENGINEERING',
    'NURSE',
];

let difference = course1.filter(x => course2.indexOf(x) === -1);
console.log(difference);

print_r($result);
