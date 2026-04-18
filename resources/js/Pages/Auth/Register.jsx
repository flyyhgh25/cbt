import { useForm, Link } from "@inertiajs/react";
export default function Register() {
    const { data, setData, post, processing, errors } = useForm({
        name: "",
        no_identity: "",
        email: "",
        password: "",
    });
    const handleSubmit = (e) => {
        e.preventDefault();
        post("/register");
    };

    const handleChange = (e) => {
        setData(e.target.name, e.target.value);
    };
    return (
        <div className="min-h-screen flex items-center justify-center">
            <div className="p-5 shadow-lg rounded-md border border-gray-100">
                <form onSubmit={handleSubmit}>
                    <div className="my-2">
                        <label htmlFor="name">Nama Lengkap</label>
                        <input
                            type="text"
                            name="name"
                            className="w-full p-2 border border-gray-500 rounded-md"
                            value={data.name}
                            onChange={handleChange}
                        />
                        {errors.name && (
                            <div className="w-full text-sm text-red-300">
                                {errors.name}
                            </div>
                        )}
                    </div>
                    <div className="my-2">
                        <label htmlFor="no_identity">NPM</label>
                        <input
                            type="number"
                            name="no_identity"
                            className="w-full p-2 border border-gray-500 rounded-md"
                            value={data.no_identity}
                            onChange={handleChange}
                        />
                        {errors.no_identity && (
                            <div className="w-full text-sm text-red-300">
                                {errors.no_identity}
                            </div>
                        )}
                    </div>
                    <div className="my-2">
                        <label htmlFor="email">Email</label>
                        <input
                            type="email"
                            name="email"
                            className="w-full p-2 border border-gray-500 rounded-md"
                            value={data.email}
                            onChange={handleChange}
                        />
                        {errors.email && (
                            <div className="w-full text-sm text-red-300">
                                {errors.email}
                            </div>
                        )}
                    </div>
                    <div className="my-2">
                        <label htmlFor="password">Password</label>
                        <input
                            type="password"
                            name="password"
                            className="w-full p-2 border border-gray-500 rounded-md"
                            value={data.password}
                            onChange={handleChange}
                        />
                        {errors.password && (
                            <div className="w-full text-sm text-red-300">
                                {errors.password}
                            </div>
                        )}
                    </div>
                    <div className="my-2">
                        <button
                            type="submit"
                            disabled={processing}
                            className="w-full p-2 bg-green-900 text-white rounded-md"
                        >
                            {processing ? "Loading...." : "Daftar"}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    );
}
