# Olga Rderplacer-Junior - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Olga Rderplacer-Junior**

## Example Practitioner: Olga Rderplacer-Junior

Profile: [CH Core Practitioner](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitioner.html)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470

**name**: Olga Rderplacer-Junior (Official)

**telecom**: [+41 32 444 55 11](tel:+41324445511), [o.rderplacer-junior@smallhospital.ch](mailto:o.rderplacer-junior@smallhospital.ch)



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "PractORderplacerJunior",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601002331470"
    }
  ],
  "name" : [
    {
      "use" : "official",
      "family" : "Rderplacer-Junior",
      "given" : ["Olga"],
      "prefix" : ["Med. pract."],
      "_prefix" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier",
              "valueCode" : "AC"
            }
          ]
        }
      ]
    }
  ],
  "telecom" : [
    {
      "system" : "phone",
      "value" : "+41 32 444 55 11"
    },
    {
      "system" : "email",
      "value" : "o.rderplacer-junior@smallhospital.ch"
    }
  ]
}

```
