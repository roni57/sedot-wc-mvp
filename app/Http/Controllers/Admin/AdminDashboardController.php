<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use App\Models\Service;
use App\Models\Benefit;
use App\Models\Testimonial;
use App\Models\Step;
use App\Models\Stat;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $settings = SiteSetting::all()->pluck('value', 'key')->toArray();
        $services = Service::orderBy('order_index')->get();
        $benefits = Benefit::orderBy('order_index')->get();
        $testimonials = Testimonial::orderBy('order_index')->get();
        $steps = Step::orderBy('order_index')->get();
        $stats = Stat::orderBy('order_index')->get();

        return view('admin.dashboard', compact('settings', 'services', 'benefits', 'testimonials', 'steps', 'stats'));
    }

    public function updateSettings(Request $request)
    {
        $fields = $request->except('_token');
        foreach ($fields as $key => $value) {
            SiteSetting::setVal($key, $value);
        }
        return back()->with('success', 'Pengaturan situs berhasil diperbarui!');
    }

    // --- SERVICE CRUD ---
    public function storeService(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|string|max:255',
            'wa_text' => 'nullable|string',
            'order_index' => 'integer'
        ]);

        Service::create($data);
        return back()->with('success', 'Layanan berhasil ditambahkan!');
    }

    public function updateService(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|string|max:255',
            'wa_text' => 'nullable|string',
            'order_index' => 'integer'
        ]);

        $service->update($data);
        return back()->with('success', 'Layanan berhasil diperbarui!');
    }

    public function destroyService($id)
    {
        Service::findOrFail($id)->delete();
        return back()->with('success', 'Layanan berhasil dihapus!');
    }

    // --- BENEFIT CRUD ---
    public function storeBenefit(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|string|max:255',
            'order_index' => 'integer'
        ]);

        Benefit::create($data);
        return back()->with('success', 'Keunggulan berhasil ditambahkan!');
    }

    public function updateBenefit(Request $request, $id)
    {
        $benefit = Benefit::findOrFail($id);
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|string|max:255',
            'order_index' => 'integer'
        ]);

        $benefit->update($data);
        return back()->with('success', 'Keunggulan berhasil diperbarui!');
    }

    public function destroyBenefit($id)
    {
        Benefit::findOrFail($id)->delete();
        return back()->with('success', 'Keunggulan berhasil dihapus!');
    }

    // --- TESTIMONIAL CRUD ---
    public function storeTestimonial(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'text' => 'required|string',
            'stars' => 'required|integer|min:1|max:5',
            'order_index' => 'integer'
        ]);

        Testimonial::create($data);
        return back()->with('success', 'Testimoni berhasil ditambahkan!');
    }

    public function updateTestimonial(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'text' => 'required|string',
            'stars' => 'required|integer|min:1|max:5',
            'order_index' => 'integer'
        ]);

        $testimonial->update($data);
        return back()->with('success', 'Testimoni berhasil diperbarui!');
    }

    public function destroyTestimonial($id)
    {
        Testimonial::findOrFail($id)->delete();
        return back()->with('success', 'Testimoni berhasil dihapus!');
    }

    // --- STEP CRUD ---
    public function storeStep(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'step_number' => 'required|integer',
            'order_index' => 'integer'
        ]);

        Step::create($data);
        return back()->with('success', 'Langkah kerja berhasil ditambahkan!');
    }

    public function updateStep(Request $request, $id)
    {
        $step = Step::findOrFail($id);
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'step_number' => 'required|integer',
            'order_index' => 'integer'
        ]);

        $step->update($data);
        return back()->with('success', 'Langkah kerja berhasil diperbarui!');
    }

    public function destroyStep($id)
    {
        Step::findOrFail($id)->delete();
        return back()->with('success', 'Langkah kerja berhasil dihapus!');
    }

    // --- STAT CRUD ---
    public function storeStat(Request $request)
    {
        $data = $request->validate([
            'label' => 'required|string|max:255',
            'value' => 'required|string|max:255',
            'order_index' => 'integer'
        ]);

        Stat::create($data);
        return back()->with('success', 'Statistik berhasil ditambahkan!');
    }

    public function updateStat(Request $request, $id)
    {
        $stat = Stat::findOrFail($id);
        $data = $request->validate([
            'label' => 'required|string|max:255',
            'value' => 'required|string|max:255',
            'order_index' => 'integer'
        ]);

        $stat->update($data);
        return back()->with('success', 'Statistik berhasil diperbarui!');
    }

    public function destroyStat($id)
    {
        Stat::findOrFail($id)->delete();
        return back()->with('success', 'Statistik berhasil dihapus!');
    }
}
