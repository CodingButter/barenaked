module.exports = (tailpress) => {
  tailpress.sizeMapper = (sizeObjects) => {
    let result = {}

    sizeObjects.forEach(function ({ slug, size }) {
      result[slug] = size
    })

    return result
  }
  tailpress.fontFamilyMapper = (fontObject) => {
    let result = {}

    fontObject.forEach(function ({ slug, families }) {
      result[slug] = families.join(",")
    })

    return result
  }
  return tailpress
}
