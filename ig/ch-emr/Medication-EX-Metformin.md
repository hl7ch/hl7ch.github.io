# EX-Metformin - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EX-Metformin**

## Example Medication: EX-Metformin

Profile: [CH IPS Medication](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-medication.html)

**code**: METFORMIN Axapharm Filmtabl 500 mg

**form**: Tablette

**amount**: 50 Tablet (unit of presentation) (Details: SNOMED CT code732936001 = 'Tablet (unit of presentation)')/1 Package - unit of product usage (qualifier value) (Details: SNOMED CT code1681000175101 = 'Package - unit of product usage')



## Resource Content

```json
{
  "resourceType" : "Medication",
  "id" : "EX-Metformin",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medication"]
  },
  "code" : {
    "coding" : [{
      "system" : "urn:oid:2.51.1.1",
      "code" : "7680590990115",
      "display" : "METFORMIN Axapharm Filmtabl 500 mg (Blister 50 Stk)"
    }],
    "text" : "METFORMIN Axapharm Filmtabl 500 mg"
  },
  "form" : {
    "coding" : [{
      "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
      "code" : "10219000",
      "display" : "Tablet"
    }],
    "text" : "Tablette"
  },
  "amount" : {
    "numerator" : {
      "value" : 50,
      "unit" : "Tablet (unit of presentation)",
      "system" : "http://snomed.info/sct",
      "code" : "732936001"
    },
    "denominator" : {
      "value" : 1,
      "unit" : "Package - unit of product usage (qualifier value)",
      "system" : "http://snomed.info/sct",
      "code" : "1681000175101"
    }
  }
}

```
