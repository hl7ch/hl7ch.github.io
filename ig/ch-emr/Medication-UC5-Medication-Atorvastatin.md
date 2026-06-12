# UC5-Medication-Atorvastatin - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC5-Medication-Atorvastatin**

## Example Medication: UC5-Medication-Atorvastatin

Profile: [CH IPS Medication](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-medication.html)

**code**: Sortis 40 mg (Atorvastatin)

**form**: Tablette

**amount**: 30 Tablette (Details: SNOMED CT code732936001 = '732936001')/1 Packung (Details: SNOMED CT code1681000175101 = '1681000175101')



## Resource Content

```json
{
  "resourceType" : "Medication",
  "id" : "UC5-Medication-Atorvastatin",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medication"]
  },
  "code" : {
    "coding" : [{
      "system" : "urn:oid:2.51.1.1",
      "code" : "7680540850605",
      "display" : "SORTIS Filmtabl 40 mg 30 Stk"
    },
    {
      "system" : "http://www.whocc.no/atc",
      "code" : "C10AA05",
      "display" : "atorvastatin"
    }],
    "text" : "Sortis 40 mg (Atorvastatin)"
  },
  "form" : {
    "coding" : [{
      "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
      "code" : "10219000"
    }],
    "text" : "Tablette"
  },
  "amount" : {
    "numerator" : {
      "value" : 30,
      "unit" : "Tablette",
      "system" : "http://snomed.info/sct|http://snomed.info/sct/2011000195101",
      "code" : "732936001"
    },
    "denominator" : {
      "value" : 1,
      "unit" : "Packung",
      "system" : "http://snomed.info/sct|http://snomed.info/sct/2011000195101",
      "code" : "1681000175101"
    }
  }
}

```
