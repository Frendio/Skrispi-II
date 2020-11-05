var Select2 = {
    init: function() {
        $("#m_select2_1, #m_select2_1_validate").select2({
            placeholder: "Pilih"
        }), $("#m_select2_2, #m_select2_2_validate").select2({
            placeholder: "Pilih"
        }), $("#m_select2_3, #m_select2_3_validate").select2({
            placeholder: "Pilih"
        }), $("#kpp, #kpp1, #kpp2").select2({
            placeholder: "Pilih KPP"
        }), $("#keb").select2({
            placeholder: "Pilih keberatan"
        }), $("#jen_pajak").select2({
            placeholder: "Pilih jenis pajak"
        }), $("#pel1, #pel2, #pel3").select2({
            placeholder: "Pilih nama PK / pelaksana"
        }), $("#pilih_periode").select2({
            placeholder: "Pilih periode"
        }), $("#jp").select2({
            placeholder: "Pilih jenis permohonan"
        }), $("#anggota").select2({
            placeholder: "Pilih anggota jemaat"
        }), $("#tipe_surat").select2({
            placeholder: "Pilih jenis surat"
        }), $("#desa1").select2({
            placeholder: "Pilih desa"
        }), $("#pilih_propinsi").select2({
            placeholder: "Pilih propinsi"
        }), $(".m-select2-general").select2({
            placeholder: "Select an option"
        }), $("#m_select2_modal").on("shown.bs.modal", function() {
            $("#m_select2_1_modal").select2({
                placeholder: "Select a state"
            }), $("#m_select2_2_modal").select2({
                placeholder: "Select a state"
            }), $("#m_select2_3_modal").select2({
                placeholder: "Select a state"
            }), $("#m_select2_4_modal").select2({
                placeholder: "Select a state",
                allowClear: !0
            })
        })
    }
};
jQuery(document).ready(function() {
    Select2.init()
});