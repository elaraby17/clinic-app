document.getElementById("toggleBtn").addEventListener("click", function () {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("w-20");
    sidebar.classList.toggle("w-64");
    document.querySelectorAll(".nav-btn span").forEach((el) => {
        el.classList.toggle("hidden");
    });
});

document.querySelectorAll(".nav-btn").forEach((btn) => {
    btn.addEventListener("click", function () {
        document.querySelectorAll(".nav-btn").forEach((b) => {
            b.classList.remove(
                "bg-gradient-to-r",
                "from-cyan-500",
                "to-blue-500",
                "text-white",
                "shadow-lg",
                "shadow-cyan-500/50",
            );
            b.classList.add(
                "text-slate-400",
                "hover:text-white",
                "hover:bg-slate-700/50",
            );
        });
        this.classList.add(
            "bg-gradient-to-r",
            "from-cyan-500",
            "to-blue-500",
            "text-white",
            "shadow-lg",
            "shadow-cyan-500/50",
        );
        this.classList.remove(
            "text-slate-400",
            "hover:text-white",
            "hover:bg-slate-700/50",
        );
    });
});

//add doctor form

const form = document.getElementById("doctorForm");
const successMsg = document.getElementById("successMsg");
const imageInput = document.getElementById("imageInput");
const fileName = document.getElementById("fileName");

// File upload handler
imageInput.addEventListener("change", function () {
    if (this.files && this.files[0]) {
        fileName.classList.remove("hidden");
        fileName.querySelector("span").textContent = this.files[0].name;
    }
});

// Form validation
form.addEventListener("submit", function (e) {
    e.preventDefault();

    const errors = {};
    const formData = new FormData(this);

    // Validation rules
    if (!formData.get("firstName").trim())
        errors.firstName = "الاسم الأول مطلوب";
    if (!formData.get("lastName").trim()) errors.lastName = "اسم العائلة مطلوب";

    const email = formData.get("email");
    if (!email.trim()) errors.email = "البريد الإلكتروني مطلوب";
    else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email))
        errors.email = "البريد الإلكتروني غير صحيح";

    if (!formData.get("phone").trim()) errors.phone = "رقم الهاتف مطلوب";
    if (!formData.get("specialization")) errors.specialization = "التخصص مطلوب";
    if (!formData.get("license").trim()) errors.license = "رقم الرخصة مطلوب";
    if (!formData.get("experience")) errors.experience = "سنوات الخبرة مطلوبة";
    if (!formData.get("consultationFee"))
        errors.consultationFee = "رسوم الاستشارة مطلوبة";

    // Clear previous errors
    document.querySelectorAll(".error-field").forEach((field) => {
        field.classList.remove("border-red-500/50");
        field.classList.add("border-slate-600");
    });
    document
        .querySelectorAll(".error-message")
        .forEach((msg) => msg.classList.add("hidden"));

    // Show errors
    if (Object.keys(errors).length > 0) {
        Object.keys(errors).forEach((key) => {
            const field = form.querySelector(`[name="${key}"]`);
            if (field) {
                field.classList.add("border-red-500/50");
                field.classList.remove("border-slate-600");
                const msg = field.parentElement.querySelector(".error-message");
                if (msg) {
                    msg.textContent = errors[key];
                    msg.classList.remove("hidden");
                }
            }
        });
        return;
    }

    // Success
    successMsg.classList.remove("hidden");
    console.log("Doctor Data:", Object.fromEntries(formData));

    setTimeout(() => {
        form.reset();
        successMsg.classList.add("hidden");
        fileName.classList.add("hidden");
    }, 3000);
});
