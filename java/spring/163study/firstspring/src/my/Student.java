package my;

public class Student {
	private int Id;

	public int getId()
	{
		return Id;
	}

	public void setId(int id)
	{
		Id = id;
	}

	private String Name;

	public String getName()
	{
		return Name;
	}

	public void setName(String name)
	{
		Name = name;
	}

	public Student()
	{

	}

	public Student(int Id, String Name)
	{
		this.Id = Id;
		this.Name = Name;
	}
}
