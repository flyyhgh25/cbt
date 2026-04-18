import { useForm } from '@inertiajs/react'

export default function Login() {
  const { data, setData, post, processing, errors } = useForm({
          no_identity: "",
          password: "",
      });
      const handleSubmit = (e) => {
          e.preventDefault();
          post("/login");
      };
  
      const handleChange = (e) => {
          setData(e.target.name, e.target.value);
      };
      return (
          <div className="min-h-screen flex items-center justify-center">
              <div className="p-5 shadow-lg rounded-md border border-gray-100">
                  <form onSubmit={handleSubmit}>
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
                              {processing ? "Loading...." : "Login"}
                          </button>
                      </div>
                  </form>
              </div>
          </div>
      );
}
