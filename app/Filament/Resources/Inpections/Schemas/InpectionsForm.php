<?php

namespace App\Filament\Resources\Inpections\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Actions;
use Filament\Actions\Action;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Fieldset;


class InpectionsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            Select::make('vehicle_id')
                ->label('Kendaraan')
                ->relationship('vehicle', 'license_plate')
                ->required(),

            Select::make('driver_id')
                ->label('Driver')
                ->relationship('driver', 'name')
                ->required(),

            Select::make('user_id')
                ->label('Inspector')
                ->relationship('user', 'name')
                ->required(),

            DatePicker::make('date_inspection')
                ->label('Tanggal Inspeksi')
                ->required(),

            Section::make('Uraian Inspeksi Kendaraan')
                ->headerActions([
                    Action::make('selectAllGood')
                        ->label('Pilih Semua Baik/Ada')
                        ->button()
                        ->color('success')
                        ->action(function ($livewire, $set) {
                            // Pemeriksaan Awal
                            $set('oil_engine', 'baik');
                            $set('radiator_coolant', 'baik');
                            $set('accu', 'baik');
                            $set('engine_start', 'ya');

                            // Kebersihan Kendaraan
                            $set('cleaning', 'ya');
                            $set('body_cleanliness', 'bersih');
                            $set('interior_cleanliness', 'bersih');
                            $set('engine_cleanliness', 'bersih');
                            $set('wheel_cleanliness', 'bersih');

                            // Pengecekan Kondisi Kendaraan
                            $set('brake_light', 'hidup');
                            $set('turn_signal_light', 'hidup');
                            $set('headlight', 'hidup');
                            $set('horn', 'hidup');
                            $set('tire_condition', 'baik');
                            $set('brake_condition', 'baik');
                            $set('oil_condition', 'baik');
                            $set('wiper_condition', 'baik');

                            // Peralatan Kendaraan
                            $set('engine_oil', 'baik');
                            $set('spare_tire', 'ada');
                            $set('seatbelt', 'baik');
                            $set('tools', 'ada');
                            $set('warning_triangle', 'ada');
                            $set('vehicle_documents', 'ada');
                        }),

                    Action::make('resetAll')
                        ->label('Reset Pilihan')
                        ->button()
                        ->color('danger')
                        ->action(function ($livewire, $set) {
                            $fields = [
                                'oil_engine',
                                'radiator_coolant',
                                'accu',
                                'body_cleanliness',
                                'interior_cleanliness',
                                'engine_cleanliness',
                                'wheel_cleanliness',
                                'brake_light',
                                'turn_signal_light',
                                'headlight',
                                'horn',
                                'tire_condition',
                                'brake_condition',
                                'oil_condition',
                                'wiper_condition',
                                'engine_oil',
                                'spare_tire',
                                'seatbelt',
                                'tools',
                                'warning_triangle',
                                'vehicle_documents',
                            ];

                            foreach ($fields as $field) {
                                $set($field, null);
                            }
                        }),
                ])
                ->schema([

                    Fieldset::make('Melakukan Pengecekan Awal')
                        ->schema([
                            Radio::make('oil_engine')
                                ->label('Oli Mesin')
                                ->options(['baik' => 'Baik', 'tidak_baik' => 'Tidak Baik'])
                                ->inline(false),

                            Radio::make('radiator_coolant')
                                ->label('Air Pendingin / Radiator')
                                ->options(['baik' => 'Baik', 'tidak_baik' => 'Tidak Baik'])
                                ->inline(false),

                            Radio::make('accu')
                                ->label('Air Accu')
                                ->options(['baik' => 'Baik', 'tidak_baik' => 'Tidak Baik'])
                                ->inline(false),
                        ])->columns(3),
                    Fieldset::make('')
                        ->schema([
                            Radio::make('engine_start')
                                ->label('Melakukan Pemasanan Mesin')
                                ->options(['ya' => 'Ya', 'tidak' => 'Tidak'])
                                ->inline(false),

                            Radio::make('cleaning')
                                ->label('Mencuci dan Membersihkan Mobil')
                                ->options(['ya' => 'Ya', 'tidak' => 'Tidak'])
                                ->inline(false),
                        ])->columns(2),
                    Fieldset::make('Kebersihan Kendaraan')
                        ->schema([
                            Radio::make('body_cleanliness')
                                ->label('Kebersihan Body Mobil / Eksterior')
                                ->options(['bersih' => 'Bersih', 'kotor' => 'Kotor'])
                                ->inline(false),

                            Radio::make('interior_cleanliness')
                                ->label('Bagian Dalam Mobil (Kursi, Karpet, Dashboard) / Interior')
                                ->options(['bersih' => 'Bersih', 'kotor' => 'Kotor'])
                                ->inline(false),

                            Radio::make('engine_cleanliness')
                                ->label('Kebersihan Mesin Mobil')
                                ->options(['bersih' => 'Bersih', 'kotor' => 'Kotor'])
                                ->inline(false),

                            Radio::make('wheel_cleanliness')
                                ->label('Kebersihan Roda Mobil')
                                ->options(['bersih' => 'Bersih', 'kotor' => 'Kotor'])
                                ->inline(false),
                        ])->columns(2),

                    Fieldset::make('Pengecekan Kondisi Kendaraan')
                        ->schema([
                            Radio::make('brake_condition')
                                ->label('Rem')
                                ->options(['baik' => 'Baik', 'tidak_baik' => 'Tidak Baik'])
                                ->inline(false),
                            Radio::make('brake_light')
                                ->label('Tanda Lampu Rem')
                                ->options(['hidup' => 'Hidup', 'mati' => 'Mati'])
                                ->inline(false),

                            Radio::make('turn_signal_light')
                                ->label('Tanda Lampu Sign')
                                ->options(['hidup' => 'Hidup', 'mati' => 'Mati'])
                                ->inline(false),

                            Radio::make('headlight')
                                ->label('Lampu Mobil')
                                ->options(['hidup' => 'Hidup', 'mati' => 'Mati'])
                                ->inline(false),

                            Radio::make('horn')
                                ->label('Klakson')
                                ->options(['hidup' => 'Hidup', 'mati' => 'Mati'])
                                ->inline(false),

                            Radio::make('tire_condition')
                                ->label('Ban')
                                ->options(['baik' => 'Baik', 'tidak_baik' => 'Tidak Baik'])
                                ->inline(false),

                            Radio::make('oil_condition')
                                ->label('Oli Rem')
                                ->options(['baik' => 'Baik', 'tidak_baik' => 'Tidak Baik'])
                                ->inline(false),

                            Radio::make('wiper_condition')
                                ->label('Wiper')
                                ->options(['baik' => 'Baik', 'tidak_baik' => 'Tidak Baik'])
                                ->inline(false),
                        ])->columns(2),

                    Fieldset::make('Peralatan Kendaraan')
                        ->schema([
                            Radio::make('engine_oil')
                                ->label('Minyak Rem')
                                ->options(['baik' => 'Baik', 'tidak_baik' => 'Tidak Baik'])
                                ->inline(false),

                            Radio::make('spare_tire')
                                ->label('Ban Cadangan')
                                ->options(['ada' => 'Ada', 'tidak_ada' => 'Tidak Ada'])
                                ->inline(false),

                            Radio::make('seatbelt')
                                ->label('Sabuk Pengaman')
                                ->options(['baik' => 'Baik', 'tidak_baik' => 'Tidak Baik'])
                                ->inline(false),

                            Radio::make('tools')
                                ->label('Peralatan (Tool)')
                                ->options(['ada' => 'Ada', 'tidak_ada' => 'Tidak Ada'])
                                ->inline(false),

                            Radio::make('warning_triangle')
                                ->label('Segitiga Pengaman')
                                ->options(['ada' => 'Ada', 'tidak_ada' => 'Tidak Ada'])
                                ->inline(false),

                            Radio::make('vehicle_documents')
                                ->label('Surat-surat Kendaraan')
                                ->options(['ada' => 'Ada', 'tidak_ada' => 'Tidak Ada'])
                                ->inline(false),
                        ])->columns(2),
                ])->columnSpanFull(),
            Section::make('Catatan')
                ->schema([
                    Textarea::make('notes')
                        ->label('Catatan Tambahan')
                        ->rows(3)
                        ->columnSpanFull(),
                ])
        ]);
    }
}
