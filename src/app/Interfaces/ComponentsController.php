<?php
/*
 * MIT License
 * Copyright (c) 2024 Kovyakin Dmitry kdv-1974@mail.ru
 */

declare(strict_types=1);

namespace Kovyakin\Components\app\Interfaces;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

interface ComponentsController
{
    public function index(Request $request):ResourceCollection;

    public function create():array;

    public function store(Request $request);

    public function show(string $id):array;

    public function edit(string $id):array;

    public function update(Request $request, string $id);

    public function destroy(string $id):array;

    public function search(Request $request):ResourceCollection;

    public function updateCheckbox(Request $request, string $id):array;

    public function destroySelected(Request $request):array;



}