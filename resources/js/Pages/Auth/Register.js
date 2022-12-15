export default function Register() {
    const { data, setData, post, processing, errors, reset } = useForm({
      name: "",
      email: "",
      role: "", // make sure this is present
      password: "",
      password_confirmation: "",
    });
  
    return (
  
          // put this after the email
          <div className="mt-4">
            <Label forInput="role" value="Role" />
  
            <select
              name="role" /* make sure this and data.role is the same */
              id="role"
              className="block w-full mt-1 rounded-md"
              onChange={onHandleChange}
            >
              <option value="siswa">Siswa</option>
              <option value="admin">Admin</option>
              <option value="adminSD">Admin SD</option>
              <option value="adminSMP">Admin SMP</option>
            </select>
          </div>
    );
  }
  