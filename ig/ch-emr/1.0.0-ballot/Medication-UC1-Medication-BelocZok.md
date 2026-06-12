# UC1-Medication-BelocZok - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC1-Medication-BelocZok**

## Example Medication: UC1-Medication-BelocZok

Profile: [CH IPS Medication](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-medication.html)

**code**: Beloc Zok 50 mg (Metoprolol)

**form**: Retardtablette

**amount**: 100 Tablette (Details: SNOMED CT code732936001 = '732936001')/1 Packung (Details: SNOMED CT code1681000175101 = '1681000175101')



## Resource Content

```json
{
  "resourceType" : "Medication",
  "id" : "UC1-Medication-BelocZok",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medication"]
  },
  "code" : {
    "coding" : [{
      "system" : "urn:oid:2.51.1.1",
      "code" : "7680521101498",
      "display" : "BELOC ZOK Ret Tabl 50 mg 100 Stk"
    },
    {
      "system" : "http://www.whocc.no/atc",
      "code" : "C07AB02",
      "display" : "metoprolol"
    }],
    "text" : "Beloc Zok 50 mg (Metoprolol)"
  },
  "form" : {
    "coding" : [{
      "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
      "code" : "10221005"
    }],
    "text" : "Retardtablette"
  },
  "amount" : {
    "numerator" : {
      "value" : 100,
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
