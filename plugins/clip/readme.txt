CLIP Plugin for ResourceSpace
=============================

This plugin adds smart image search functionality to ResourceSpace using the CLIP model from OpenAI running locally via a Python service.

It allows you to:
- Automatically generate vector embeddings for resource images
- Search using natural language queries
- Store and retrieve vectors using MySQL
- Run a Python-based API service to perform image search and vector generation

All processing is done locally — no cloud or third-party services are used.


REQUIREMENTS
------------

You will need:

- Python 3.8 or later
- pip (Python package manager)
- ResourceSpace with image resources
- A working MySQL login that has access to all relevant ResourceSpace databases


INSTALLATION
------------

1. Create a Python virtual environment:

   python3 -m venv clip-env
   source clip-env/bin/activate

Install required Python packages:

pip install fastapi uvicorn torch torchvision ftfy regex tqdm
pip install git+https://github.com/openai/CLIP.git
pip install mysql-connector-python
pip install python-multipart
pip install faiss-cpu


Start the CLIP service:

cd /path/to/resourcespace/plugins/clip/scripts
source ../../../../clip-env/bin/activate
python clip_service.py --dbuser [mysql_user] --dbpass [mysql_password]
You should see:

🔌 Loading CLIP model...
✅ Model loaded.

The service will now be running on:

http://localhost:8000

Run:
php /plugins/clip/scripts/generate_vectors.php

This will:

Detect resources that need new vectors (based on file_checksum)
Send the image to the Python service
Store the 512-dim vector in the resource_clip_vector table

OPTIONAL: Test Command-Line Search
To test semantic search from the command line:

php /plugins/clip/scripts/search_vectors.php "a red car driving through snow"

This will:

Send the search query to the Python service

Fetch matching resource IDs and titles (field8)

Print the results

TROUBLESHOOTING
If the Python script says ModuleNotFoundError: No module named 'fastapi', make sure you activated your virtual environment.

For the Python service, the MySQL credentials must have access to all ResourceSpace databases on the server if using a shared Python service. The calling plugin will
pass the database, ensuring multi-tenant support.
